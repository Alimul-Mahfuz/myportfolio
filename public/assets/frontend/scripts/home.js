/**
 * This script is responsible to load the dynamic content of home page
 */
let loadContainer=document.getElementById("education_load");
var innerContent='';
fetch('/get-educationsinfo', {
    method: "GET"
}).then((response) => {
    return response.json();
}).then((json) => {
    if (json.success) {
        json.data.forEach(element => {
            innerContent+=`<div class="inner-education my-2 d-flex flex-column flex-md-row">
            <p class="">${element.passing_month} ${element.passing_year}</p>
            <div class="education-item">
                <div class="edu-details">
                    <p class="fspx-24">${element.degree_name}</p>
                    <p class="fspx-18 fw-600">${element.institute_name}</p>
                    <p class="">Major: ${element.major}</p>
                    <p class="">CGPA: ${element.cgpa} in scale of ${element.cgpa_scale}</p>
                </div>
            </div>
        </div>`
        console.log(innerContent)
        });
        loadContainer.innerHTML=innerContent
    }
    else if(json.error){
        let noData=document.createElement('div');
        noData.classList.add('text-center','text-danger');
        noData.innerText=json.error
        loadContainer.appendChild(noData)
    }
}).catch(() => {

})


fetch("/get-getdemo",{
    method:"GET",
}).then((resp)=>{
    return resp.json();
})