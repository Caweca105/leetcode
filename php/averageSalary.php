class Solution {

/**
 * @param Integer[] $salary
 * @return Float
 */
function average($salary) {
    $smallest = min($salary); 
    $largest = max($salary);
    
    unset($salary[array_search($smallest,$salary,true)]);
    unset($salary[array_search($largest,$salary,true)]);
    
    $salary = array_filter($salary);
    return array_sum($salary)/count($salary);
}
}