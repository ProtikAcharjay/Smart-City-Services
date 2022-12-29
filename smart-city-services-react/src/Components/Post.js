import React, {useEffect, useState} from "react";


const Post = (props) => {

    const PostStyle = {
        backgroundColor : "#FF0000",
        padding: "10px",
        color: "#fff",
    }
    return(
        <div style={PostStyle}>
            <span>{props.cl_id}</span>
            <span>{props.cl_name}</span>
            <span>{props.cl_phone}</span>
            <span>{props.cl_address}</span>
            <span>{props.cl_dob}</span>
            <span>{props.cl_salary}</span>
            <span>{props.cl_nid}</span>
            <span>{props.cl_joblocation}</span>
            <span>{props.cl_status}</span>
            <span>{props.created_at}</span>
            <span>{props.updated_at}</span>
        </div>
    );

}
export default Post;