import React from 'react';

function ListItemsDemo(props) {

 const myList = [
        {
          id : '1',
          title : 'Chuyên đề Phát triển web 2',
          content : ' 19211TNC10711201 - GV: Phan Thanh Nhuần'
        },
        {
          id : '2',
          title : 'Tìm hiểu về Reactjs',
          content : 'List and key trong React'
        },
      ]
    const listItemsDemo = myList.map((item) =>
      <li key= {item.id} >
        <h1>{item.title}</h1>
        </li>
    );
    const listItemsDemo1 = myList.map((item) =>
      <li key = {item.id}>
        <h2>{item.title}</h2>
        <h4>{item.content}</h4>
        </li>
    );
  return (
    <ul >{listItemsDemo} {listItemsDemo1}</ul>
  );

}
 
export default ListItemsDemo