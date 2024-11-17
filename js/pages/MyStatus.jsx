import React, { useState, useEffect } from 'react';
import axios from 'axios';
const MyStatus = () => {
    const storedUname = sessionStorage.getItem('username');
    const [enquirys, setEnquirys] = useState([]);
    /* const [error, setError] = useState('');
    const [success, setSuccess] = useState(''); */
    useEffect(() => {
      axios.get(`http://127.0.0.1:8000/api/showmyenquiry/${storedUname}`)
        .then((response) => setEnquirys(response.data.data))
        .catch((error) => console.error(error));
    }, []);


  return (
<div className="container">
  <h1 style={{ color: 'blue' }}>{storedUname} - your enquiry status </h1>
  <br />
  <div className="table-responsive">
    <table className="table table-bordered table-striped">
      <thead>
        <tr>
          <th style={{ width: '10%' }}>#</th>
          <th style={{ width: '20%' }}>Projector Serial No</th>
          <th style={{ width: '20%' }}>User</th>
          <th style={{ width: '20%' }}>Description</th>
          <th style={{ width: '20%' }}>Status</th>
          <th style={{ width: '30%' }}>Enquiry Date</th>
        </tr>
      </thead>
      <tbody>
        {enquirys.map((enquiry, index) => (
          <tr key={index}>
            <td>{index + 1}</td>
            <td>{enquiry.sname}</td>
            <td>{enquiry.username}</td>
            <td>{enquiry.desc1}</td>
            <td>
              {(enquiry.status === '1') ? (
                <p style={{ color: 'green' }}>Service Completed By dfs</p>
              ) :(enquiry.status === '2') ? (
                <p style={{ color: 'blue' }}>Service Moved To vendor</p>
              ) :(enquiry.status === '3') ? (
                <p style={{ color: 'blue' }}>Service Completed By vendor</p>
              ):(
                <p style={{ color: 'red' }}>Service Applied</p>
              )}
            </td>



            <td>{enquiry.rdate}</td>
          </tr>
        ))}
      </tbody>
    </table>
  </div>
</div>


  )
}

export default MyStatus