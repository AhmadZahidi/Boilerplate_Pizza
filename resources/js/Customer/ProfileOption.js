import React from "react";
import ReactDOM from "react-dom";
import Button from "./Button";
import ShowDashboard from "./ShowDashboard";
import ShowOrderHistory from "./ShowOrderHistory";
import ShowUpdateProfile from "./ShowUpdateProfile";

const ProfileOption = () => {
    return (
        <div className="row">
            <div className="col-3">
                <div className="d-flex flex-column">
                    <Button name="Dashboard" />
                    <Button name="Order History" />
                    <Button name="Update Profile" />
                </div>
            </div>

            <div className="col-9">
                <ShowUpdateProfile />
            </div>
        </div>
    );
};

export default ProfileOption;

if (document.getElementById("ProfileOption")) {
    ReactDOM.render(
        <ProfileOption />,
        document.getElementById("ProfileOption")
    );
}
