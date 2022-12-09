import React, { Component } from "react";
import ReactDOM from "react-dom";

import axios from "axios";

class ShowDashboardClass extends Component {
    constructor(props) {
        super(props);

        this.state = {
            customers: [],
        };
    }

    componentDidMount() {
        axios.get("/api/customer/me").then(({ data }) => {
            // console.log(data);
            this.setState({
                customers: data,
            });
        });
    }

    render() {
        return (
            <React.Fragment>
                <div>
                    <h1>{this.state.customers.name}</h1>

                    <form className="mt-5">
                        <h2>Email</h2>
                        <label>{this.state.customers.email}</label>

                        <h2>Phone Number</h2>
                        <label>{this.state.customers.phoneNumber}</label>

                        <h2>Address</h2>
                        <label>{this.state.customers.address}</label>
                    </form>
                </div>
            </React.Fragment>
        );
    }
}

export default ShowDashboardClass;
