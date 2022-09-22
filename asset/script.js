console.log("Script file is working");

const form = document.querySelector('#form');
const telSelector = form.querySelector('input[name="phone"]');
const telSelector2 = form.querySelector('input[name="phone2"]');
const inputMask = new Inputmask('+7 (999) 999-99-99');
inputMask.mask(telSelector);
inputMask.mask(telSelector2);

const validation = new JustValidate('.form-fields');

validation
    .addField('#name', [
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'required',
            value: true,
            errorMessage: '*'   //не введено
        }
    ])
    .addField('#surname', [
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'required',
            value: true,
            errorMessage: '*'   //не введно
        }
    ])
    .addField('#patronymic', [
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'required',
            value: true,
            errorMessage: '*'   //не введно
        }
    ])
    .addField('#email', [
        {
            rule: 'required',
            value: true,
            errorMessage: '*', //не введено 
        },
        {
            rule: 'email',
            value: true,
            errorMessage: '*', // введен некорректно
        },
    ])
    .addField('#phone', [
        {
            rule: 'required',
            value: true,
            errorMessage: '*', //не введен
        },
        {
            rule: 'function',
            validator: function() 
            {
                const phone = telSelector.inputmask.unmaskedvalue();
                return phone.length === 10;
            },
            errorMessage: '*', //Некорректный телефон
        },
    ])
    .onSuccess((event) => {
    console.log('Валидация прошла, форма отправляется', event);

    let formData = new FormData(event.target);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () 
    {
        if (xhr.readyState === 4) 
        {
            if (xhr.status === 200) 
            {
                console.log('Отправлено!!!!!!!');
            }
        }
    }

    xhr.open('POST', 'mail.php', true);
    xhr.send(formData);

    event.target.reset();
});



