import React from 'react';
function ActionLink() {
  function handleClick(e) {
    e.preventDefault();
    console.log('The link was clicked.');
  }
  return (
    <a href="/#" onClick={handleClick}>
      Tìm hiểu về React
    </a>
  );
} 
  class sukienclick extends React.Component {
      render() {
          return (
                 < ActionLink/>        
          );
      }
  }
  
  export default sukienclick;