document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal-overlay');
    const form = document.getElementById('multistep-form');
    const steps = document.querySelectorAll('.form-step');
    const dots = document.querySelectorAll('.progress-bar .dot');
    const openBtns = document.querySelectorAll('.btn-hero-primary, .btn-nav-quote');
    const closeBtn = document.querySelector('.modal-close');
    const phoneInput = form.querySelector('input[name="user_phone"]');

    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    };

    const validateStep = (stepNumber) => {
        const currentStepEl = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
        const inputs = currentStepEl.querySelectorAll('input[required]');
        let isValid = true;

        inputs.forEach(input => {
            input.style.border = "none";
            
            if (!input.value.trim()) {
                isValid = false;
                input.style.border = "1px solid red";
            } else if (input.type === 'email' && !validateEmail(input.value)) {
                isValid = false;
                input.style.border = "1px solid red";
            } else if (input.type === 'tel') {
                const digits = input.value.replace(/\D/g, "");
                if (digits.length < 10) {
                    isValid = false;
                    input.style.border = "1px solid red";
                }
            }
        });

        return isValid;
    };

    const goToStep = (stepNumber) => {
        steps.forEach(s => s.classList.remove('active'));
        dots.forEach(d => d.classList.remove('active'));

        const targetStep = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
        if (targetStep) {
            targetStep.classList.add('active');
            for(let i = 0; i < stepNumber; i++) {
                if(dots[i]) dots[i].classList.add('active');
            }
        }
    };

    phoneInput.addEventListener('input', (e) => {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    openBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'flex';
            goToStep(1);
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        form.reset();
        steps.forEach(s => s.classList.remove('active'));
        document.querySelector('.form-step[data-step="1"]').classList.add('active');
    });

    form.addEventListener('click', (e) => {
        const currentStepEl = document.querySelector('.form-step.active');
        let currentStep = parseInt(currentStepEl.dataset.step);

        if (e.target.classList.contains('btn-next')) {
            if (validateStep(currentStep)) {
                goToStep(currentStep + 1);
            }
        } else if (e.target.classList.contains('btn-back')) {
            goToStep(currentStep - 1);
        }
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (validateStep(3)) {
            const submitBtn = form.querySelector('.btn-submit');
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.5';

            const formData = new FormData(form);
            formData.append('action', 'save_lead');
            formData.append('nonce', wonderland_ajax.nonce);

            fetch(wonderland_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if(data.success) {
                    goToStep(4);
                } else {
                    alert(data.data.message || 'Error saving lead.');
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = '1';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
            });
        }
    });
});