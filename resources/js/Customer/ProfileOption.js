import React, { useState } from "react";
import ReactDOM from "react-dom";
import Button from "./Button";
import ShowDashboard from "./ShowDashboard";
import ShowOrderHistory from "./ShowOrderHistory";
import ShowUpdateProfile from "./ShowUpdateProfile";

const ProfileOption = () => {
    const [clickedDashboard, setClickedDashboard] = useState(true);
    const [clickedOrder, setClickedOrder] = useState(false);
    const [clickedUpdate, setClickedUpdate] = useState(false);

    const updateDashboard = (value) => {
        setClickedDashboard(value);
        setClickedOrder(!value);
        setClickedUpdate(!value);
    };

    const updateOrder = (value) => {
        setClickedDashboard(!value);
        setClickedOrder(value);
        setClickedUpdate(!value);
    };

    const updateProfile = (value) => {
        setClickedDashboard(!value);
        setClickedOrder(!value);
        setClickedUpdate(value);
    };

    return (
        <div className="row">
            <div className="col-3">
                <div className="d-flex flex-column bg-light d-grid gap-2">
                    <Button
                        name="Dashboard"
                        isClick={clickedDashboard}
                        condition={updateDashboard}
                    />
                    <Button
                        name="Order History"
                        isClick={clickedOrder}
                        condition={updateOrder}
                    />
                    <Button
                        name="Update Profile"
                        isClick={clickedUpdate}
                        condition={updateProfile}
                    />
                </div>
            </div>

            <div className="col-9 bg-light ps-3 py-3">
                {clickedDashboard && <ShowDashboard />}
                {clickedOrder && <ShowOrderHistory />}
                {clickedUpdate && <ShowUpdateProfile />}
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
