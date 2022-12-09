import axios from "axios";
import React, { useEffect, useState } from "react";

const ShowDashboard = () => {
    const [customers, setCustomers] = useState([]);

    useEffect(() => {
        fetchProduct();
    });

    const fetchProduct = async () => {
        await axios.get("/api/customer/me").then(({ data }) => {
            console.log(data);
            setCustomers(data);
        });
    };

    return (
        <div>
            {customers.length > 0 &&
                customers.map((cust, key) => (
                    <div key={key}>
                        <h1>{cust.name}</h1>

                        <form className="mt-5">
                            <h2>Email</h2>
                            <label>{cust.email}</label>

                            <h2>Phone Number</h2>
                            <label>{cust.phoneNumber}</label>

                            <h2>Address</h2>
                            <label>{cust.address}</label>
                        </form>
                    </div>
                ))}
            {}
        </div>
    );
};

export default ShowDashboard;
