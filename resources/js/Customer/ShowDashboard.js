import React from "react";
import ReactDOM from "react";

const ShowDashboard = () => {
    return (
        <div>
            <h1>Customer Name</h1>

            <form className="mt-5">
                <h2>Email</h2>
                <label>Customer Email</label>

                <h2>Phone Number</h2>
                <label>Customer Phone Number</label>

                <h2>Address</h2>
                <label>Customer Address</label>
            </form>
        </div>
    );
};

export default ShowDashboard;
