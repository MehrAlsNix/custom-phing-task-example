<?php
/**
 * custom-phing-task-example
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @copyright 2017 MehrAlsNix (http://www.mehralsnix.de)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://github.com/MehrAlsNix/custom-phing-task-example
 */

namespace MehrAlsNix\CustomPhingTask;

class ExampleType extends \DataType
{
    private $data;

    protected function getRef()
    {
        return $this->getCheckedRef($this, 'exampletype');
    }

    public function setRefid(\Reference $ref)
    {
        $this->log(get_class() . " :: setRefid :: " . $ref->getRefId());
        parent::setRefid($ref);
    }

    public function getData()
    {
        $ret = $this->data;

        if ($this->isReference()) {
            $ret = $this->getRef()->getData();
        }
        $this->log(get_class() . ' :: getData :: ' . $ret);

        return $ret;
    }

    public function setData($data)
    {
        $this->log(get_class() . " :: setData :: " . $data);
        $this->data = $data;
    }
}
