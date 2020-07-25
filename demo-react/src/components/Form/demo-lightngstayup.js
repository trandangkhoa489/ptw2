import React from 'react';
class Demolighting extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        books: [],
        newBook: {
          title: '',
        }   
      };
    }
  
    renderBooks = (books) => (
      books.map((book, index) => {
        console.log(book);
        return (
        <div key={index}>
          <h1>{book.title}</h1>
          <input 
            value={book.title}
            onChange={(e) => this.handleEditBook(e.target.value, index)}
          />
        </div>
      )})
    );
  
    handleEditBook = (value, editIndex) => {
      const { books } = this.state;
      const newBooks = books.map((book, index) => {
        if (index === editIndex) {
          book.title = value;
        }
        return book;
      })
      this.setState({ books: newBooks});
    }
  
    handleAdd = (e) => {
      const {newBook} = this.state;
      newBook.title = e.target.value;
      this.setState({ newBook: newBook });
    }
  
    handleSubmit = () => {
      const { newBook, books } = this.state;
      books.push({
        title: newBook.title,
      });
      console.log(books);
      this.setState({ books });
    }
  
  
    render () {
      const { books, newBook } = this.state;
  
      return (
        
        <div className="App">
         Lighting stay up
          <br></br>
          <span>Title:</span>
          <input value={newBook.title} onChange={this.handleAdd} />
          
          <button onClick={this.handleSubmit}>Add</button>
          <hr />
          {this.renderBooks(books)}
        </div>
      );
    }
  }
  export default Demolighting;