(function () {
    'use strict';

    function movePupils(e) {
        var container = document.querySelector('.wolf-eye-container');
        if (!container) return;

        var eyes = container.querySelectorAll('.wolf-eye');
        if (!eyes.length) return;

        // Wspólny kierunek od środka pary oczu — ta sama translacja px w każdym oknie (bez lustrzanki na całej „soczewce”).
        var cr = container.getBoundingClientRect();
        var midX = cr.left + cr.width / 2;
        var midY = cr.top + cr.height / 2;
        var dx = e.clientX - midX;
        var dy = e.clientY - midY;
        var len = Math.hypot(dx, dy);
        var maxMove = 5.5;
        var strength = len > 0 ? Math.min(maxMove, len / 42) : 0;
        var moveX = len > 0 ? (dx / len) * strength : 0;
        var moveY = len > 0 ? (dy / len) * strength : 0;

        eyes.forEach(function (eye) {
            var pupil = eye.querySelector('.wolf-pupil');
            if (!pupil) return;
            pupil.style.transform =
                'translate(calc(-50% + ' + moveX + 'px), calc(-50% + ' + moveY + 'px))';
        });
    }

    document.addEventListener('mousemove', movePupils);

    function revealOnScroll() {
        var reveals = document.querySelectorAll('.reveal');
        var windowHeight = window.innerHeight;
        for (var i = 0; i < reveals.length; i++) {
            var top = reveals[i].getBoundingClientRect().top;
            if (top < windowHeight - 150) {
                reveals[i].classList.add('active');
            }
        }
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
    revealOnScroll();

    var toggle = document.querySelector('.mobile-nav-toggle');
    var panel = document.querySelector('.mobile-nav-panel');
    if (toggle && panel) {
        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            panel.classList.toggle('is-open');
            var open = panel.classList.contains('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    }

    var drops = document.querySelectorAll('.sw-nav__dropdown');
    drops.forEach(function (drop) {
        var btn = drop.querySelector('.sw-nav__dropdown-trigger');
        if (!btn) return;
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var opening = !drop.classList.contains('is-open');
            drops.forEach(function (d) {
                d.classList.remove('is-open');
                var b = d.querySelector('.sw-nav__dropdown-trigger');
                if (b) b.setAttribute('aria-expanded', 'false');
            });
            if (opening) {
                drop.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
    document.addEventListener('click', function () {
        drops.forEach(function (drop) {
            drop.classList.remove('is-open');
            var btn = drop.querySelector('.sw-nav__dropdown-trigger');
            if (btn) btn.setAttribute('aria-expanded', 'false');
        });
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            drops.forEach(function (drop) {
                drop.classList.remove('is-open');
                var btn = drop.querySelector('.sw-nav__dropdown-trigger');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });
        }
    });

    var timeline = document.querySelector('[data-timeline]');
    if (timeline) {
        var switcherBtns = timeline.querySelectorAll('[data-timeline-path]');

        function setTimelinePath(path) {
            timeline.classList.remove('is-path-sport', 'is-path-kolekcja');
            timeline.classList.add('is-path-' + path);
            switcherBtns.forEach(function (b) {
                b.classList.toggle('is-active', b.getAttribute('data-timeline-path') === path);
            });
        }

        switcherBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                setTimelinePath(btn.getAttribute('data-timeline-path'));
            });
        });

        if (window.innerWidth < 900) {
            setTimelinePath('sport');
        }
    }

    var permitToggle = document.querySelector('[data-permit-toggle]');
    if (permitToggle) {
        var permitTabs = permitToggle.querySelectorAll('[data-permit-target]');
        var permitPanels = document.querySelectorAll('[data-permit-panel]');

        function setPermit(active) {
            permitTabs.forEach(function (tab) {
                var isActive = tab.getAttribute('data-permit-target') === active;
                tab.classList.toggle('is-active', isActive);
                tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
                tab.setAttribute('tabindex', isActive ? '0' : '-1');
            });

            permitPanels.forEach(function (panel) {
                var show = panel.getAttribute('data-permit-panel') === active;
                if (show) {
                    panel.removeAttribute('hidden');
                } else {
                    panel.setAttribute('hidden', '');
                }
            });
        }

        permitTabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                var target = tab.getAttribute('data-permit-target');
                if (!target) return;
                setPermit(target);
            });
        });
    }
})();
