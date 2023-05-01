import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";

function ItemDetailsModal(props) {
    const { itemID } = props;
    const [items, setitems] = useState({
        name: "",
        stat1: "",
        stat1amount: "",
        stat2: "",
        stat2amount: "",
        stat3: "",
        stat3amount: "",
        slot: "",
        material: "",

    });
    useEffect(() => {
        if (itemID == 0) {
            setitems({
                name: "",
                stat1: "",
                stat1amount: "",
                stat2: "",
                stat2amount: "",
                stat3: "",
                stat3amount: "",
                slot: "",
                material: "",
            });
            return;
        }
        fetch(`/api/item/${itemID}`, {
            headers: {
                Acccept: "application/json",
            },
        }).then(async (response) => {
            if (response.status === 200) {
                const data = await response.json();
                setitems(data);
            }
        });
    }, [itemID]);

    return (
        <div className="modal" tabindex="-1" id="itemDetailsModal">
            <div className="modal-dialog">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">{items.name}</h5>
                        <button
                            type="button"
                            className="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div className="modal-body">
                        <table className="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <th>Item Név:</th>
                                    <td>{items.name}</td>
                                </tr>
                                <tr>
                                    <th>stat1:</th>
                                    <td>{items.stat1}</td>
                                </tr>
                                <tr>
                                    <th>stat1amount</th>
                                    <td>{items.stat1amount}</td>
                                </tr>
                                <tr>
                                    <th>stat2:</th>
                                    <td>{items.stat2}</td>
                                </tr>
                                <tr>
                                    <th>stat2amount</th>
                                    <td>{items.stat2amount}</td>
                                </tr>
                                <tr>
                                    <th>stat3:</th>
                                    <td>{items.stat3}</td>
                                </tr>
                                <tr>
                                    <th>stat3amount</th>
                                    <td>{items.stat3amount}</td>
                                </tr>
                                <tr>
                                    <th>Slot:</th>
                                    <td>{items.stat3amount}</td>
                                </tr>
                                <tr>
                                    <th>MAterial : </th>
                                    <td>{items.material}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div className="modal-footer">
                        <button
                            type="button"
                            className="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default ItemDetailsModal;
