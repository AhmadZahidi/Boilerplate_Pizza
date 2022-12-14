import axios from "axios";
import React, { Component } from "react";

class ShowUpdateProfileClass extends Component {
    constructor(props) {
        super(props);

        this.state = {
            customers: [],
        };
    }

    componentDidMount() {
        axios.get("/api/customer/me/showCustomerData").then(({ data }) => {
            this.setState({
                customers: data,
            });
        });
    }

    render() {
        return (
            <React.Fragment>
                <div>
                    <form>
                        <div className="mb-3">
                            <label className="form-label">Name</label>
                            <input
                                type="text"
                                className="form-control"
                                id="name"
                                defaultValue={this.state.customers.name || ""}
                            ></input>
                        </div>
                        <div className="mb-3">
                            <label className="form-label">Email address</label>
                            <input
                                type="email"
                                className="form-control"
                                id="email"
                                aria-describedby="emailHelp"
                                defaultValue={this.state.customers.email || ""}
                            ></input>
                        </div>
                        <div className="mb-3">
                            <label className="form-label">Phone Number</label>
                            <input
                                type="text"
                                className="form-control"
                                id="phoneNumber"
                                defaultValue={
                                    this.state.customers.phoneNumber || ""
                                }
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
            </React.Fragment>
        );
    }
}

export default ShowUpdateProfileClass;
