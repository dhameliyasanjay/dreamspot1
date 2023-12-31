const formOrderBy = document.querySelector(".thim-course-order select"),
    searchForm = document.querySelector("form.search-courses");
let elSkeleton, elNoLoadAjaxFirst;
const urlCourses = lpGlobalSettings.courses_url || "";
let elArchive = null;
const lpGetParamsUrl = a => {
    let b = {}, c = a.searchParams.toString(), d = c.split("&");
    return d.forEach((c, d) => {
        let a = c.split("=");
        b[a[0]] = a[1]
    }), b
}, formFilter = document.querySelector("form.thim-course-filter");

function reloadPageWithParamsFilter(a) {
    let b = new URL(window.location.href);
    for (let c in 1 === a.paged && (b = new URL(urlCourses)), a) null != a[c] && b.searchParams.set(c, a[c]);
    b.searchParams.set("isPageLoad", 1), window.location.href = b
}

null != formFilter && formFilter.addEventListener("submit", async function (b) {
    b.preventDefault();
    let c = JSON.parse(window.localStorage.getItem("lp_filter_courses")) || {},
        d = formFilter.querySelectorAll(".thim-filter-sidebar-field"), e = {paged: 1};
    elArchive.scrollIntoView({behavior: "smooth"}), d.forEach((a, d, f) => {
        let b = a.getAttribute("name"), c = a.getAttribute("type");
        switch (c) {
            case"checkbox":
                void 0 === e[b] && (e[b] = []), a.checked && e[b].push(a.value);
                break;
            case"radio":
            case"select":
                a.checked && (e[b] = a.value)
        }
    });
    let a = {...c, ...e};
    elSkeleton || (a.paged = 1, reloadPageWithParamsFilter(a)), elNoLoadAjaxFirst && (elSkeleton.style.display = "block"), window.lpArchiveRequestCourse({...a})
}), formOrderBy && formOrderBy.addEventListener("change", function () {
    let a = JSON.parse(window.localStorage.getItem("lp_filter_courses")) || {};
    a.order_by = this.value || "", elSkeleton ? elSkeleton.style.display = "block" : reloadPageWithParamsFilter(a), window.lpArchiveRequestCourse({...a})
}), wp.hooks.addAction("lp-js-get-courses", "lp", function (a) {
    let b = document.querySelector(".course-index"), c = document.querySelector(".sticky-header");
    if (b) {
        let d = b.querySelector("span");
        d && void 0 !== a.data.from_to && (d.innerHTML = a.data.from_to)
    }
    c && c.classList.add("menu-hidden")
}), document.addEventListener("DOMContentLoaded", function () {
    elArchive = document.querySelector(".lp-archive-courses"), elSkeleton = document.querySelector(".lp-archive-course-skeleton"), elNoLoadAjaxFirst = document.querySelector(".no-first-load-ajax")
})
