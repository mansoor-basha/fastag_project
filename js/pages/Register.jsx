
import React, { useState } from 'react';
import axios from 'axios';

const Register = () => {
  const [inputs, setInputs] = useState({
    name: '',
    mobile: '',
    email: '',
    address: '',
    city: '',
    username: '',
    password: '',
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

    axios.post('http://127.0.0.1:8000/api/registercus', inputs)
      .then((response) => {
        if (response.data.success) {
          showSuccessAlert('Register successful. Redirecting...');
          setInputs({
            name: '',
            mobile: '',
            email: '',
            address: '',
            city: '',
            username: '',
            password: '',
          });
          setTimeout(() => {
            window.location.href = "/login";
          }, 2000);
        } else {
          showErrorAlert('Error');
        }
      })
      .catch((error) => {
        showErrorAlert('Registration failed. Please check your credentials.');
        console.error(error);
      });
  };

  
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
              <h1 className="display-5 mb-5">Registration Page</h1>


            </div>
            <form className="text-center mb-4" action="" method="post" onSubmit={handleFormSubmit}>
              <div className="row g-4">
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="name" className="form-control p-3 border-0" placeholder="Name" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="mobile" className="form-control p-3 border-0" placeholder="Phone" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="email" className="form-control p-3 border-0" placeholder="Email" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="city" className="form-control p-3 border-0" placeholder="City" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="address" className="form-control p-3 border-0" placeholder="Address" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="username" className="form-control p-3 border-0" placeholder="Username" onChange={handleChange} required />
                  </div>
                </div>
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="password" name="password" className="form-control p-3 border-0" placeholder="Password" onChange={handleChange} required />
                  </div>
                </div>
              </div>
              <br />
              <div className="col-xl-12">
              <div className="col-xl-2 mx-auto">

                <input type="submit" className="btn btn-primary w-100 p-3 border-0" value="GET STARTED" />
              </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Register;
