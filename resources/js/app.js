import 'bootstrap';

var hero = document.getElementById('hero-header');

var typewriter = new Typewriter(hero, {
    loop: true
});

typewriter.typeString('Sophia B. Photography')
    .deleteAll()
    .typeString('Check out my work!')
    .pauseFor(2500)
    .start();

