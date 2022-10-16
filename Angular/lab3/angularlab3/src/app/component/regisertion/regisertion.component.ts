import { Component, EventEmitter, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-regisertion',
  templateUrl: './regisertion.component.html',
  styleUrls: ['./regisertion.component.css']
})
export class RegisertionComponent implements OnInit {
  studentName="";
  studentAge=0;
  @Output() myEvent = new EventEmitter();
  AddNewStudent(){
    let NewStudent:{name:string, age:number} = {name: this.studentName, age: this.studentAge};
    if(this.studentAge<=40 && this.studentName.length >=3)

    this.myEvent.emit(NewStudent);

  }
  constructor() {}

  ngOnInit(): void {
  }

}
