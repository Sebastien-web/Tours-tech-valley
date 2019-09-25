<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('.nav__burger').addEventListener('click', (e) => {
            const $burger = e.currentTarget;
            const $list = $burger.parentElement.querySelector('.nav__list');
            $burger.classList.toggle('nav__burger--active');
            $list.classList.toggle('nav__list--active');
        });
    })
</script>