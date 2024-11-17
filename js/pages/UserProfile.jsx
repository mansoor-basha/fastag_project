import React, { useState, useEffect } from 'react';
import axios from 'axios';

const UserProfile = () => {
    const storedUser = sessionStorage.getItem('user');
    const [user, setUser] = useState(null);
    const [workers, setWorkers] = useState([]);

    useEffect(() => {
        const url = new URL(window.location.href);
        const extractedUser = url.searchParams.get('user');
        setUser(extractedUser || '');
    }, []);

    useEffect(() => {
        if (user) {
            axios.get(`http://127.0.0.1:8000/api/showworkerprofile/${user}`)
                .then((response) => setWorkers(response.data.data))
                .catch((error) => console.error(error));
        }
    }, [user]);

    return (
        <div>
            <div className="container-fluid py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                        <h5 className="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Worker Profile</h5>
                        <h1 className="display-5 w-50 mx-auto">Welcome to User Profile</h1>
                    </div>
                    
                    <div className="row g-4 justify-content-center align-items-center wow fadeInUp" data-wow-delay=".3s" style={{ minHeight: '70vh' }}>
                        <div className="col-xxl-6 col-lg-6 col-md-6 col-sm-12 bg-primary rounded p-4">
                            <div className="d-flex flex-column justify-content-center align-items-center bg-light rounded p-3">
                                <h4 className="text-dark mb-4">Personal Info</h4>
                                {workers.map((worker, index) => (
                                    <div key={index}>
                                        <p className="text-dark mb-3">Worker Name: {worker.name}</p>
                                        <p className="text-dark mb-3">Worker Profession: {worker.speci}</p>
                                        <p className="text-dark mb-3">Worker Experience: {worker.experience}</p>
                                        <p className="text-dark mb-3">Worker Mobile: {worker.mobile}</p>
                                        <p className="text-dark mb-0">Worker Email: {worker.email}</p>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                    <center></center>
                </div>
            </div>
        </div>
    );
};

export default UserProfile;
