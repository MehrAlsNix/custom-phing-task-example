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

class ExampleTask extends \Task
{
    private $msg;

    /** @var ExampleType $data */
    private $data;

    /**
     * @param \Reference $ref
     */
    public function setExampletypeRef(\Reference $ref)
    {
        if ($this->data === null) {
            $this->data = new ExampleType();
            $this->data->setProject($this->getProject());
        }
        $this->data->setRefid($ref);
    }

    public function main()
    {
        if ($this->data !== null) {
            $this->data->getData();
        } else {
            $this->getProject()->log($this->msg);
        }
    }

    /**
     * @param string $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
}
