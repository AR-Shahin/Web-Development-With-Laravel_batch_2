
const log = (el = "Ok") => console.log(el)
const $$ = (el) => document.querySelector(el)


const admin_base_url = `${window.location.origin}/admin`


const setSuccessAlert = (mgs = 'Data Save Successfully!')=>{
    Swal.fire(
        'Good job!',
        mgs,
        'success'
        )
}
