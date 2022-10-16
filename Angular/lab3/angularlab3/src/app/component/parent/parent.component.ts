import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-parent',
  templateUrl: './parent.component.html',
  styleUrls: ['./parent.component.css']
})
export class ParentComponent implements OnInit {

  AllStudentsParent: {name:string, age:number}[] = [];
  NewStudent = { name:"", age:0 }
  constructor() { }

  ngOnInit(): void {
  }


  GetData(data:any){
  this.NewStudent = data;
  this.AllStudentsParent.push(this.NewStudent)
  console.log(this.AllStudentsParent)
  }
}
