document.addEventListener('mousemove', (e) => {
    const eyes = document.querySelectorAll('.eye');
    
    eyes.forEach(eye => {
        // posisi mata
        const rect = eye.getBoundingClientRect();
        const x = rect.left + rect.width /2;
        const y = rect.top + rect.height / 2;

        // menghitung sudut antar kursor dan mata 
        const rad = Math.atan2(e.pageX - x, e.pageY - y );
        const rot = (rad * (180 / Math.PI) * -1 ) +180;

        // memutar pupil

        const pupil = eye.querySelector ('.pupil');
        pupil.style.transform = `rotate(${rot}deg) translateY(-10px)`;
    });

});