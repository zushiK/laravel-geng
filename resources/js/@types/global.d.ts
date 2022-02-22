import { Alpine as AlpineType } from 'alpinejs';

declare global {
  //let/constではグローバル変数にならないので仕方ない
  var Alpine: AlpineType;
}
