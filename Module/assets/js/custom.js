// Footer hide
setTimeout(()=>{
    let x = document.getElementsByTagName('footer')[0];
    let y = document.getElementsByClassName('main_dls_1_0_0 ')[0];
    y.setAttribute("style", `margin-bottom: ${x.clientHeight}px !important;`);  
}, 3000);

document.addEventListener("scroll", function () {
    myLazy('img.lazy', 'src');
    myLazy('source.lazy', 'srcset');
    myLazy('.lazy-bg', 'img-bg');
    myLazy('.load', 'loaded');
});
LazyShowScreen('img.lazy', 'src')
LazyShowScreen('.load', 'loaded')

// Lazy load
function myLazy(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let winTop = window.innerHeight;

    for (let i = 0; i < section_loads.length; i++) {
        let pos_top = section_loads[i].getBoundingClientRect().top;
        let pos_bottom = section_loads[i].getBoundingClientRect().bottom;
        let delay = section_loads[i].getAttribute('delay-time');
        if (pos_top <= winTop && pos_bottom >= 0) {
            switch (attr) {
                case 'src':
                    section_loads[i].src = section_loads[i].dataset.src;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'srcset':
                    section_loads[i].srcset = section_loads[i].dataset.srcset;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'img-bg':
                    section_loads[i].classList.remove('lazy-bg');
                    section_loads[i].classList.add('img-bg');
                    break;
                case 'loaded':
                    setTimeout(() => {
                        section_loads[i].classList.remove('load');
                        section_loads[i].classList.add('loaded');
                    }, delay)
                    break;
                case 'slide':
                    section_loads[i].classList.add('slide');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
        }
    }
}

function LazyShowScreen(sec, attr) {
    const section_loads = document.querySelectorAll(sec);
    let win_height = screen.height;
    for (let i = 0; i < section_loads.length; i++) {
        let delay = section_loads[i].getAttribute('delay-time');

        if (section_loads[i].getBoundingClientRect().top < win_height) {
            switch (attr) {
                case 'loaded':
                    setTimeout(() => {
                        section_loads[i].classList.add('loaded');
                    }, delay)
                    break;
                case 'src':
                    section_loads[i].src = section_loads[i].dataset.src;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'srcset':
                    section_loads[i].srcset = section_loads[i].dataset.srcset;
                    section_loads[i].classList.remove('lazy');
                    break;
                case 'img-bg':
                    section_loads[i].classList.remove('lazy-bg');
                    section_loads[i].classList.add('img-bg');
                    break;
                case 'slide':
                    section_loads[i].classList.remove('slide');
                    section_loads[i].classList.add('slide');
                    break;
                default:
                    console.log(`Sorry, we are out of ${attr}.`);
            }
        }
    }
}
