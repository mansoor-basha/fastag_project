import React, { useState, useEffect } from 'react';
import axios from 'axios';
const Edit = () => {
    const storedUname = sessionStorage.getItem('username');
    const [id, setId] = useState(null);

    const [inputs, setInputs] = useState({
        
        comname: '',
        sno: '',
        ipadd: '',
        college: '',
        dept: '',
        cno: '',
        lat: '',
        lon: '',
        username: storedUname,
        id: id,
        

      });
     
   
    
      const [error, setError] = useState('');
      const [success, setSuccess] = useState('');
    
      const showErrorAlert = (message) => {
        setError(message);
        setSuccess('');
        setTimeout(() => {
          setError('');
        }, 5000);
      };
    
      const showSuccessAlert = (message) => {
        setSuccess(message);
        setError('');
        setTimeout(() => {
          setSuccess('');
        }, 5000);
      };
    
      const handleChange = (event) => {
        setInputs({ ...inputs, [event.target.name]: event.target.value });
        setError('');
    };
    
      const handleFormSubmit = (event) => {
        event.preventDefault();
    
        axios.put('http://127.0.0.1:8000/api/editpro', inputs)
          .then((response) => {
            if (response.data.success) {
              showSuccessAlert('Projector Edited...');
              setInputs({
                comname: '',
                sno: '',
                ipadd: '',
                college: '',
                dept: '',
                cno: '',
                lat: '',
                lon: '',
                id: id,
              });
              setTimeout(() => {
                window.location.href = "/projectoradd";
              }, 2000);
            } else {
              showErrorAlert('Error');
            }
          })
          .catch((error) => {
            showErrorAlert('failed. Please check your credentials.');
            console.error(error);
          });
      };
      useEffect(() => {
        const url = new URL(window.location.href);
        const extractedId = url.searchParams.get('id');
        setId(extractedId || '');
    }, []);

      
      
      return (
        <div>
            {success && (
            <div className="alert success-alert">
              <h3 style={{ color:'green' }}>{success}</h3>
              <a className="close" onClick={() => setSuccess('')}>&times;</a>
            </div>
          )}
    
          {error && (
            <div className="alert danger-alert">
              <h3 style={{ color:'red' }}>{error}</h3>
              <a className="close" onClick={() => setError('')}>&times;</a>
            </div>
          )}
          <div className="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
            <div className="container py-5">
              <div className="bg-light px-4 py-5 rounded">
                <div className="text-center">
                  <h1 className="display-5 mb-5">Edit Projector</h1>
    
    
                </div>
                <form className="text-center mb-4" action="" method="post" onSubmit={handleFormSubmit}>
                  <div className="row g-4">
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="comname" className="form-control p-3 border-0" placeholder="Company Name" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="sno" className="form-control p-3 border-0" placeholder="Serial No" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="ipadd" className="form-control p-3 border-0" placeholder="Ip Address" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="college" className="form-control p-3 border-0" placeholder="College" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="dept" className="form-control p-3 border-0" placeholder="Department" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="cno" className="form-control p-3 border-0" placeholder="Class No" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="lat" className="form-control p-3 border-0" placeholder="Latitude" onChange={handleChange} required />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="col-xl-4 mx-auto">
                        <input type="text" name="lon" className="form-control p-3 border-0" placeholder="Longitute" onChange={handleChange} required />
                      </div>
                    </div>
                   
                  </div>
                  <br />
                  <div className="col-xl-12">
                  <div className="col-xl-2 mx-auto">
    
                    <input type="submit" className="btn btn-primary w-100 p-3 border-0" value="GET STARTED" />
                    <br />
                    <a href="https://developers-dot-devsite-v2-prod.appspot.com/maps/documentation/utils/geocoder" target="_blank">Get Location</a>

                  </div>
                  </div>
    
                </form>
              </div>
            </div>
          </div>
         
        </div>
      )
    }
    
    export default Edit;