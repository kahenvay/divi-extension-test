// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class HelloWorld extends Component {

  static slug = 'uly_image_link';

  render() {

    return (

        <a className="uly-image-link" href={this.props.url}><span>{this.props.text}</span></a>

    );
  }
}

export default HelloWorld;
