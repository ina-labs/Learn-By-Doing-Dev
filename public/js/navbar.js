const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const intancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});

elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav,{
    edge: "left"
});

// <script>
//         $(document).ready(function () {
//             $(".sidenav").sidenav();
//             $('.dropdown-trigger').dropdown();
//         });

//     </script>