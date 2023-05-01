import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";
import ItemDetailsModal from "./ItemDetailModal";

function ItemList() {
    const [itemId, setItemID] = useState(0);
    const [item, setitem] = useState([]);
    useEffect(() => {
        listitem();
    }, []);
    const deleteItem = (id) => {
        fetch(`/api/item/${id}`, {
            method: "DELETE",
            headers: {
                Acccept: "application/json",
            },
        }).then(async (response) => {
            if (response.status === 204) {
                listitem();
            }
        });
    }
    const listitem = () => {
        fetch(`/api/item`, {
            headers: {
                Acccept: "application/json",
            },
        }).then(async (response) => {
            if (response.status === 200) {
                const data = await response.json();
                setitem(data);
            }
        });
    }

    const itemList = [];
    item.forEach((items) => {
        itemList.push(
            <tr>
                <td>{items.id}</td>
                <td>{items.name}</td>
                <td>{items.stat1}</td>
                <td>{items.stat1amount}</td>
                <td>{items.stat2}</td>
                <td>{items.stat1amount2}</td>
                <td>{items.stat3}</td>
                <td>{items.stat1amount3}</td>
                <td>{items.slot}</td>
                <td>{items.material}</td>
                <td>
                    <button
                        className="btn btn-outline-secondary"
                        data-bs-toggle="modal"
                        data-bs-target="#itemDetailsModal"
                        onClick={() => setItemID(items.id)}
                    >
                        Részletek
                    </button>
                    <a
                        href={`/item/${items.id}/edit`}
                        className="btn btn-outline-secondary"
                    >
                        Módosítás
                    </a>
                    <button onClick={() => deleteItem(items.id)} className="btn btn-outline-secondary">Törlés</button>
                </td>
            </tr>
        );
    });

    return (
        <>
            <ItemDetailsModal itemId={itemId} />
            <div className="container">
                <div className="card">
                    <div className="card-header">
                        <h4>Emberek</h4>
                    </div>
                    <div className="card-body">
                        <table className="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Név</th>
                                    <th>stat1</th>
                                    <th>stat1amount</th>
                                    <th>stat2</th>
                                    <th>stat2amount</th>
                                    <th>stat3</th>
                                    <th>stat3amount</th>
                                    <th>Slot</th>
                                    <th>material</th>
                                </tr>
                            </thead>
                            <tbody>{itemList}</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </>
    );
}

export default ItemList;

if (document.getElementById("itemList")) {
    const element = document.getElementById("itemList");
    const Index = ReactDOM.createRoot(element);
    Index.render(
        <React.StrictMode>
            <ItemList />
        </React.StrictMode>
    );
}
