/**
 * @param {number} x
 * @return {boolean}
 */
 var isPalindrome = function (x) {
    let backwardsX = x.toString()
        .split('')
        .reverse('')
        .join('')
    return parseInt(backwardsX) === x ? true : false;
};