import './bootstrap';
import AJAX from './components/ajax/ajax.js';

document.querySelectorAll('[data-request]').forEach(element => {
    AJAX.form(element);
});

window.accordion = function(object){
    import('./components/accordion').then(({ default : init }) => init(object) );
}
window.onload = () => {
    const arLazyItems = document.querySelectorAll('[data-lazy]');
    arLazyItems.forEach(element => {
        var fnName = element.dataset.lazy;
        if (window[fnName] == undefined || typeof window[fnName] != 'function') return console.log(`Lazy функция ${fnName} не найдена`);
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        }
        const server = new IntersectionObserver(handlerObserver, options);
        function handlerObserver(entries, observer) {
            entries.forEach(entry =>{
                if (!entry.isIntersecting) return;
                const object = entry.target;
                window[object.dataset.lazy](object);
                observer.unobserve(object);
            })
        }
        server.observe(element);
    })
}
