import React from 'react'

const AdminHome = () => {
    const storedUname = sessionStorage.getItem('username');
    console.log("Stored username:", storedUname);


  return (
    <div>
        AdminHome
        <p>Hi {storedUname}</p>


    </div>
  )
}

export default AdminHome