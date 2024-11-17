import React, { useState, useEffect } from 'react';
import axios from 'axios';

const Login = () => {
  const [inputs, setInputs] = useState({
    email: '',
    password: '',
  });
  const [error, setError] = useState('');
  const [success, setSuccess] = useState('');
  const [userData, setUserData] = useState(null);

  const showErrorAlert = (message) => {
    setError(message);
    setSuccess('');
  };

  const showSuccessAlert = (message) => {
    setSuccess(message);
    setError('');
  };

  const handleChange = (event) => {
    setInputs({ ...inputs, [event.target.name]: event.target.value });
  };

  useEffect(() => {
    if (userData) {
      try {
        sessionStorage.setItem('username', userData.username);
        setTimeout(() => {
          window.location.href = "/customerhome";
        }, 2000);
      } catch (error) {
        console.error('Error storing username in session storage:', error);
      }
    }
  }, [userData]);
  

  const fetchUserData = () => {
    axios.get(`http://127.0.0.1:8000/api/userdata/${inputs.email}`)
      .then((response) => {
        console.log('Response data:', response.data.data);
        if (response.data && response.data.data.length > 0) {
          const userData = response.data.data[0]; 
          setUserData(userData);
          console.log('Username:', userData.username);
        } else {
          showErrorAlert('Invalid response format from server.');
        }
      })
      .catch((error) => {
        console.error(error);
        showErrorAlert('Failed to fetch user data.');
      });
  };
  

  const handleFormSubmit = (event) => {
    event.preventDefault();

    axios.post('http://127.0.0.1:8000/api/customerloginpost', inputs)
      .then((response) => {
        if (response.data.success) {
          showSuccessAlert('Login successful. Redirecting...');
          fetchUserData();
        } else {
          showErrorAlert('Invalid email or password.');
        }
      })
      .catch(() => {
        showErrorAlert('Login failed. Please check your credentials.');
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
              <h1 className="display-5 mb-5">Login Page</h1>
            </div>
            <form className="text-center mb-4" action="" method="post" onSubmit={handleFormSubmit}>
              <div className="row g-4">
                <div className="col-lg-12">
                  <div className="col-xl-4 mx-auto">
                    <input type="text" name="email" className="form-control p-3 border-0" placeholder="Email" onChange={handleChange} required />
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
  );
}

export default Login;
