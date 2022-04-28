import { Controller } from "@hotwired/stimulus";
import axios from "axios";

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
  //   connect() {
  // this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';

  // console.log("I just appeared into existence!!");

  static values = {
    infoUrl: String,
  };

  play(event) {
    event.preventDefault();

    console.log("Playing...");
    console.log(this.infoUrlValue);

    axios.get(this.infoUrlValue).then((res) => {
      //   console.log(res);

      const audio = new Audio(res.data.url);
      audio.play();
    });
  }
}
