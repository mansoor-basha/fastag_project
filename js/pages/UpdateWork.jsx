import React, { useState, useEffect } from 'react';
import axios from 'axios';

const UpdateWork = () => {
    const storedUname = sessionStorage.getItem('eid');
    const [id, setId] = useState(null);
    const [inputs, setInputs] = useState({
        wname: '',
        file: null,
        eid: storedUname,
    });
    const [error, setError] = useState('');
    const [success, setSuccess] = useState('');

    const handleChange = (event) => {
        const { name, type, value, files } = event.target;

        setInputs({
            ...inputs,
            [name]: type === 'file' ? files[0] : value,
        });
    };

    const handleFormSubmit = async (event) => {
        event.preventDefault();

        const formData = new FormData();
        formData.append('wname', inputs.wname);
        formData.append('file', inputs.file);
        formData.append('eid', inputs.eid);
        formData.append('id', id);

        try {
            const response = await axios.post('http://127.0.0.1:8000/api/workpost', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });

            if (response.data.success) {
                setSuccess('Work Updated...');
                setInputs({
                    wname: '',
                    file: null,
                    eid: storedUname,
                });
                setTimeout(() => {
                    window.location.href = "/emphome";
                }, 2000);
            } else {
                setError('Error');
            }
        } catch (error) {
            setError('Db insert failed. Please check details.');
            console.error(error);
        }
    };

    useEffect(() => {
        const url = new URL(window.location.href);
        const extractedId = url.searchParams.get('id');
        setId(extractedId);
    }, []);

    return (
        <div>
            <div className="content-wrapper">
                <div className="content-header">
                    <div className="container-fluid">
                        <div className="row mb-2">
                            <div className="col-sm-6">
                                <h1 className="m-0">Update Work</h1>
                            </div>
                            <div className="col-sm-6">
                                <ol className="breadcrumb float-sm-right">
                                    <li className="breadcrumb-item"><a href="#">Home</a></li>
                                    <li className="breadcrumb-item active">Update Work</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section className="content">
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col-md-12">
                                <div className="card card-primary">
                                    <div className="card-header">
                                        <h3 className="card-title">Update Work details form<small></small></h3>
                                    </div>
                                    <br />
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
                                    <form id="quickForm" method="post" onSubmit={handleFormSubmit} encType="multipart/form-data">
                                        <div className="card-body">
                                            <div className="form-group">
                                                <label htmlFor="exampleInputEmail1">Work Details</label>
                                                <textarea name="wname" className="form-control" id="exampleInputEmail1" placeholder="Work Details" onChange={handleChange} required ></textarea>
                                            </div>
                                            <div className="form-group">
                                                <label htmlFor="exampleInputPassword1">Upload Image</label>
                                                <input type="file" name="file" className="form-control" id="exampleInputPassword1" placeholder="Mobile" onChange={handleChange} required />
                                            </div>


                                        </div>
                                        <div className="card-footer">
                                            <button type="submit" className="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div className="col-md-6"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    );
};

export default UpdateWork;
