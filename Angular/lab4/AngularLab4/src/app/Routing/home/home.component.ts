import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styles: [
  ]
})
export class HomeComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
  myRegFormValidation = new FormGroup({
    name: new FormControl("",Validators.required),
    age: new FormControl(0,[Validators.min(20), Validators.max(40)]),
    email: new FormControl("",Validators.required)
  })

  message = "";

  get NameValid(){
    return this.myRegFormValidation.controls.name.valid;
  }

  get AgeValid(){
    return this.myRegFormValidation.controls.age.valid;
  }
  get EmailValid(){
    return this.myRegFormValidation.controls.email.valid;
  }
  SendData(){

    if(this.myRegFormValidation.valid){
      this.message ="Valid";
    }
  }
}
