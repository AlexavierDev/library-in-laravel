import './bootstrap';
import 'bootstrap';

const coverInput = document.getElementById('coverInput');
        const cover = document.querySelector('.card-img-top');
        coverInput.addEventListener('change', () => {
            const file = coverInput.files[0];
            const reader = new FileReader();
            reader.onload = () => {
                cover.src = reader.result;
            }
            reader.readAsDataURL(file);
        });