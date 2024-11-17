import React, { useState } from 'react';
import axios from 'axios';

const Login = () => {
  const [inputs, setInputs] = useState({
    username: '',
    password: '',
  });
  const [error, setError] = useState('');
  const [success, setSuccess] = useState('');

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

  const handleFormSubmit = (event) => {
    event.preventDefault();

    axios.post('http://127.0.0.1:8000/api/customerloginpost', inputs)
      .then((response) => {
        if (response.data.success) {
          showSuccessAlert('Login successful. Redirecting...');
          setInputs({ username: '', password: '' });
          sessionStorage.setItem('username', inputs.username);
          setTimeout(() => {
            window.location.href = "/customerhome";
          }, 2000);
        } else {
          showErrorAlert('Invalid username or password.');
        }
      })
      .catch(() => {
        showErrorAlert('Login failed. Please check your credentials.');
      });
  };

  return (
    <div>
      {success && (
        <div className="alert alert-success alert-dismissible fade show" role="alert">
          {success}
          <button type="button" className="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      )}

      {error && (
        <div className="alert alert-danger alert-dismissible fade show" role="alert">
          {error}
          <button type="button" className="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
  );
}

export default Login;
