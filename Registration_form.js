function validateForm() {
    const F_name = document.getElementById("F_name").value;
    const M_name = document.getElementById("M_name").value;
    const L_name = document.getElementById("L_name").value;
    const email = document.getElementById("emailId").value;
    const mobileno = document.getElementById("mobileno").value;
    const date = document.getElementById("date").value;
    const gender = document.getElementById("gender").value;
    const Address1 = document.getElementById("Address1").value;
    const Address2 = document.getElementById("Address2").value;
    const pincode  = document.getElementById("pincode").value;
    const City = document.getElementById("City").value;
    const state = document.getElementById("state").value;
    const Country = document.getElementById("Country").value;
    const Education = document.getElementById("Education").value;
    //const ECertificate = document.getElementById("ECertificate").value;
    const Marital_Status = document.getElementById("Marital_Status").value;
    //const Disability = document.getElementById("Disability").value;



    if (F_name === "" || M_name === "" || L_name === "" || email === "" || mobileno === "" || date === "" || gender === "Select"
        || Address1 === "" || Address2 === "" || pincode === "" || City === "" || state === "Select" ||
        Country === "" || Education ==="" || /*ECertificate ==="" ||*/ Marital_Status ||  Disability === "") {
        alert("Please fill out all required fields.");
        return false;
    }
    alert("Your data submit Successfully" );
    return true;
}