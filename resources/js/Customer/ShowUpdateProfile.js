import React, { useState } from "react";
import ReactDom from "react-dom";
import axios from "axios";

const ShowUpdateProfile = () => {
    const [name, setName] = useState("");

    const sendData = async (e) => {
        e.preventDefault();

        const formData = new FormData();
        formData.append("name", name);

        axios.post(`http://localhost:8000/api/customer/me`, formData);
    };

    return (
        <div>
            <form onSubmit={sendData}>
                <div className="mb-3">
                    <label className="form-label">Name</label>
                    <input
                        type="text"
                        className="form-control"
                        id="name"
                        onChange={(event) => {
                            setName(event.target.value);
                        }}
                    ></input>
                </div>
                <div className="mb-3">
                    <label className="form-label">Email address</label>
                    <input
                        type="email"
                        className="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                    ></input>
                </div>
                <div className="mb-3">
                    <label className="form-label">Phone Number</label>
                    <input
                        type="text"
                        className="form-control"
                        id="phoneNumber"
                    ></input>
                </div>
                <div className="mb-3">
                    <label className="form-label">Password</label>
                    <input
                        type="password"
                        className="form-control"
                        id="exampleInputPassword1"
                    ></input>
                </div>
                <button type="submit" className="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    );
};

export default ShowUpdateProfile;
