import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.css']
})
export class TableComponent implements OnInit {
  @Input() AllStudentsParent: {name:string, age:number}[] = [];
  constructor() { }

  ngOnInit(): void {
  }

}
