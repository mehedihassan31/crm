// $(document).ready(function () {
//     new TomSelect("#tom-select", {
//         sortField: {
//             field: "text",
//             direction: "asc"
//         }
//     });
// })


document.querySelectorAll('.tom-select').forEach((el)=>{
    let settings = {};
    new TomSelect(el,settings);
});
