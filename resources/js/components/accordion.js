class Accordion {
    constructor(element) {
        this.element = element;
        this.items = [];
        this.init();
    }
    init() {
        let buttons = this.element.querySelectorAll('[data-target]');
        buttons.forEach(button => {
            let action =  button.dataset.action;
            let target = button.dataset.target;
            let content = document.querySelector(button.dataset.target);
            this.items[target] = {
                button,
                content,
                isOpen: content.classList.contains('active')
            }
            button.addEventListener('click', () => {
                if (action === 'toggle') {
                    this.toggleItems(target);
                }
            })
        });
    }

    toggleItems(target) {
        for (const [itemTarget, item] of Object.entries(this.items)) {
            if (itemTarget === target) {
                this.toggle(item, !item.isOpen)
            } else {
                this.toggle(item, false);
            }
        }
    }

    toggle(item, state) {
        item.button.classList.toggle('active', state);
        item.content.classList.toggle('active', state);
        item.isOpen = state;
    }
}

export default function init($element) {
    new Accordion($element);
}
