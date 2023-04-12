// based on https://gist.github.com/paulirish/12fb951a8b893a454b32

declare global {
    interface Node {
        on(name: string, fn: void): any;
    }
    interface NodeList {
        on(name: string, fn: void): any;
        addEventListener(name: string, fn: void): any;
        __proto__: Array<any>;
    }
    interface Window {
        on(name: string, fn: void): any;
    }
}

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

Node.prototype.on = window.on = function (name, fn) {
    this.addEventListener(name, fn);
};

NodeList.prototype.__proto__ = Array.prototype; // eslint-disable-line

NodeList.prototype.on = NodeList.prototype.addEventListener = function (
    name,
    fn
) {
    this.forEach((elem) => {
        elem.on(name, fn);
    });
};

export { $, $$ };
