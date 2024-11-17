import React, { useState } from 'react';
import axios from 'axios';

const Admin = () => {
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
        const { name, value } = event.target;
        setInputs(prevInputs => ({ ...prevInputs, [name]: value }));
    };

    const handleFormSubmit = (event) => {
        event.preventDefault();

        axios.post('http://127.0.0.1:8000/api/adminloginpost', inputs)
            .then((response) => {
                if (response.data.success) {
                    showSuccessAlert('Login successful. Redirecting...');
                    setInputs(prevInputs => ({ ...prevInputs, username: '', password: '' }));
                    sessionStorage.setItem('username', inputs.username);
                    setTimeout(() => {
                        window.location.href = "/newenquiry";
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
        <div id="InfoBanner" className="alert success-alert" style={{ backgroundColor:'green',color:'white' }}>
          <span className="reversed reversedRight" style={{ color:'white' }}>&#10004;</span>
          <span className="reversed reversedLeft">{success}</span>
        </div>
      )}

      {error && (
        <div id="InfoBanner" className="alert danger-alert" style={{ backgroundColor:'red',color:'white' }}>
          <span className="reversed reversedRight">&#9888;</span>
          <span className="reversed reversedLeft">{error}</span>
        </div>
      )}
            <div className="login-box">
                <div className="card card-outline card-primary">
                    <div className="card-header text-center">
                        <a href="" className="h1"><b>Vendor</b></a>
                        
                    </div>
                    <div className="card-body">
                        <p className="login-box-msg">Sign in to start your session</p>
                        <form onSubmit={handleFormSubmit}>
                            <div className="input-group mb-3">
                                <input type="text" name="username" className="form-control" placeholder="Username" onChange={handleChange} required />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div className="input-group mb-3">
                                <input type="password" name="password" className="form-control" placeholder="Password" onChange={handleChange} required />
                                <div className="input-group-append">
                                    <div className="input-group-text">
                                        <span className="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div className="row">
                                <div className="col-4">
                                    <button type="submit" className="btn btn-primary btn-block">Sign In</button>
                                    <a href="/addventor">Register</a>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Admin;
