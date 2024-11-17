import React, { useState, useEffect } from 'react';
import axios from 'axios';
const CustomerHome = () => {
    const storedUname = sessionStorage.getItem('username');

    const [enquirys, setEnquirys] = useState([]);
    const [inputs, setInputs] = useState({
      sname: '',
      username: storedUname,
      name: '',
      mobile: '',
      email: '',
      desc: '',
      
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
    };
    const handleFormSubmit = (event) => {
      event.preventDefault();
  
      axios.post('http://127.0.0.1:8000/api/enquiry', inputs)
        .then((response) => {
          if (response.data.success) {
            showSuccessAlert('Enquiry Added...');
            setInputs({
              sname: '',
              username: storedUname,
              name: '',
              mobile: '',
              email: '',
              desc: '',

            });
            setTimeout(() => {
              window.location.href = "/customerhome";
            }, 2000);
          } else {
            showErrorAlert('Error');
          }
        })
        .catch((error) => {
          showErrorAlert('Db insert failed. Please check your details.');
          console.error(error);
        });
    };
   
    useEffect(() => {
      axios.get(`http://127.0.0.1:8000/api/showmyprojector/${storedUname}`)
        .then((response) => setEnquirys(response.data.data))
        .catch((error) => console.error(error));
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
                    <h1 className="display-5 mb-5">Projector Service Enquiry Form</h1>
                </div>
                
                <form className="text-center mb-4" method="post" onSubmit={handleFormSubmit}>
                    <div className="row g-4">
                        <div className="col-xl-10 col-lg-12">
                            <div className="row g-4">
                                <div className="col-md-6 col-xl-3">

                                    <select className="form-select p-3 border-0" name="sname" onChange={handleChange} required>
                                        <option value="" className="">Choose Projector</option>
                                        {enquirys.map((enquiry) => (
                                          <option value={enquiry.sno} key={enquiry.id}>
                                            dept-{enquiry.dept},class.no-{enquiry.cno}
                                          </option>
                                        ))}
                                                          
                                    </select>
                                </div>
                                <div className="col-md-6 col-xl-3">
                                    <input type="text" className="form-control p-3 border-0" name="name" placeholder="Name" onChange={handleChange} required />
                                </div>
                                <div className="col-md-6 col-xl-3">
                                    <input type="text" className="form-control p-3 border-0" name="mobile" placeholder="Phone" onChange={handleChange} required />
                                </div>
                                <div className="col-md-6 col-xl-3">
                                    <input type="email" className="form-control p-3 border-0" name="email" placeholder="Email" onChange={handleChange} required />
                                </div>
                                <div className="col-md-6 col-xl-3">
                                  <textarea name="desc" className="form-control p-3 border-0" id="" placeholder="Description" onChange={handleChange} required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div className="col-xl-2 col-lg-12">
                            <input type="submit" className="btn btn-primary w-100 p-3 border-0" value="SUBMIT" />

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    </div>
    
  )
}

export default CustomerHome
