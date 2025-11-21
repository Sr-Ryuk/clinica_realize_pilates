import 'bootstrap/dist/css/bootstrap.min.css';
import './bootstrap';
import 'bootstrap';
import "bootstrap-icons/font/bootstrap-icons.css";

import '../css/style.css';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const content = document.querySelector(".content-area");
    const toggle = document.getElementById("toggleSidebar");

    if (!sidebar || !content || !toggle) return;

    const savedState = localStorage.getItem("sidebar_state");

    if (savedState === "collapsed") {
        sidebar.classList.add("collapsed");
        content.classList.add("sidebar-collapsed");
    } else {
        sidebar.classList.remove("collapsed");
        content.classList.remove("sidebar-collapsed");
    }

    if (sidebar.classList.contains("collapsed")) {
        document
            .querySelectorAll('[data-bs-toggle="tooltip"]')
            .forEach(el => new bootstrap.Tooltip(el));
    }

    toggle.addEventListener("click", () => {
        const collapsed = sidebar.classList.toggle("collapsed");
        content.classList.toggle("sidebar-collapsed", collapsed);

        localStorage.setItem("sidebar_state", collapsed ? "collapsed" : "expanded");

        if (collapsed) {
            document
                .querySelectorAll('[data-bs-toggle="tooltip"]')
                .forEach(el => new bootstrap.Tooltip(el));
        } else {
            document.querySelectorAll(".tooltip").forEach(t => t.remove());
        }
    });
});
