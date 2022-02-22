import { Alpine as AlpineType } from 'alpinejs';

declare global {
  //let/constではグローバル変数にならないのでvarを使用、仕方ない
  var Alpine: AlpineType;
}
