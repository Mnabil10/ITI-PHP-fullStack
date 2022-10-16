import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-second',
  templateUrl: './second.component.html',
  styleUrls: ['./second.component.css']
})
export class SecondComponent  {
  i = 4;
  myImage = `assets/Images/${this.i}.jpg`;
  sliderStop:any;

  Next(){
    this.i ++;
    if(this.i>8){this.i = 8}
    this.myImage = `assets/Images/${this.i}.jpg`;
  }
  Pervious(){
    this.i --;
    if(this.i<4){this.i = 4}
    this.myImage = `assets/Images/${this.i}.jpg`;
  }
  Slide(){
    let slider = setInterval(() =>{
      if (this.i>=8){
        this.i = 4;
      }
      else{
        this.i ++;
      }
      this.myImage = `assets/Images/${this.i}.jpg`;
    }, 1000);
    this.sliderStop = slider;
  }
  Stop(){
    clearInterval(this.sliderStop);
  }

}
